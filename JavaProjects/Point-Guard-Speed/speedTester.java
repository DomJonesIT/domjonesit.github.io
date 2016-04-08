package com.domjonesit;

public class speedTester {
    public static void main (String[] arguments) {
        westbrookSpeed jordan = new westbrookSpeed();
        wallSpeed nike = new wallSpeed();
        jordan.speed = 22;
        nike.speed = 18;
        System.out.println("Russell Westbrooks's fast break speed (in seconds) wearing Jordan\'s:");
        jordan.displaySpeed();
        jordan.seconds();
        System.out.println("John Wall's fast break speed (in seconds) wearing Nike\'s:");
        nike.displaySpeed();
        nike.seconds();
    }
}
