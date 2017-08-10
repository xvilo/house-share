<?php

class Auth {

    /**
     * Generates login token (password)
     * @return int
     */
    static public function generateToken()
    {
        return mt_rand(100000, 999999);
    }

    /**
     * @param $username
     * @param $token
     * @return bool
     */
    static public function validateToken($username, $token)
    {
        $userData = new User();
        $userData->getByMobilePhone($username);

        $userTokens = $userData->getUnusedTokens();
        $tokenCleaned = preg_replace('/\s+/', '', $token);

        $date = new DateTime();

        foreach ($userTokens as $token => $id)
        {
            if($token === $tokenCleaned) {
                $date = date('Y-d-m G:i:s');
                self::invalidateToken($userData->getId(), ['used_at', $date]);
                return true;
            }
        }

        return false;
    }

    /**
     * @param $id int the token ID
     * @param $timestamp array columnName => value
     */
    static private function invalidateLoginToken($id, $timestamp)
    {
        $data = ['token_used_at' => $timestamp];
        Database::updateToken($id, $data);
    }
}