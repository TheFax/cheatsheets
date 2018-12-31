#include "TimerOne.h"
#include <util/atomic.h>

volatile unsigned int test = 0xFF00;

void setup()
{
 
  Serial.begin(115200);
  Timer1.initialize(10000); //Call interrupt every 10ms
  Timer1.attachInterrupt(myInterrupt);
  Timer1.start();

}

void myInterrupt()
{
  //Interrupt just toggles the value of test.  Either 0x00FF or 0xFF00
  static bool alt = true;
  if(alt) test = 0x00FF;
  else    test = 0xFF00;
  alt = !alt;
}

void loop()
{
  unsigned int local;
  //ATOMIC_BLOCK(ATOMIC_RESTORESTATE)
  
  //RB_ATOMIC_START
  
  //RB_ATOMIC_END
  
  {
     local = test;
  }
 
  //Test value of local.  Should only ever be 0x00FF or 0xFF00
  if(!(local == 0xFF00 || local == 0x00FF))
  {
    //local value incorrect due to nonatomic access of test
    Serial.println(local, HEX);
  }
}
