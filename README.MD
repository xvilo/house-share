# Project for flat

This is a small web application to keep track of some stuff happening at our flat.
It's also made as an exercise just to do some PHP from scratch! 

## Features:
* Buy tokens to use the washing machine. 
  * Tokens can be purchased via Stripe. 
* Assigns an x amount of time to a person to use the washing machine. This way it won't be used double.
* Creates a small, simple cleaning schedule based on week number. Every week somebody has to do the cleanup.
   * Gives a weekly reminder via SMS (Twilio API).
* Login happens by mobile phone number. Temporary passwords will be sent via SMS (Twilio API)

## TODO:
* Basic working of this thing.
* Stripe integration for payments.
* Twilio integration for SMS notifications and log in.