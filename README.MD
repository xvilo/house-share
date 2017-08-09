# Project for flat

This is a small web application to keep track of some stuff happening at our flat.
It's also made as excersise to just do some PHP from scratch! 

## Features:
* Buy tokens to washing at the washing machine. 
  * Tokens can be bought via Stripe. 
* Assings an x amount of time to a person to use the washmachine. This way it won't be used double.
* Creates a small simple cleaning schedule based on week number. Every week somebody has to do cleaning.
   * Gives a weekly reminder via SMS (Twilio API).
* Login happens on basis of mobile phone number. Temporary passwords will be send via SMS (Twilio API)

## TODO:
* Basic working of this thing.
* Stripe intergration for payments.
* Twilio intergration for SMS notifcations and login.