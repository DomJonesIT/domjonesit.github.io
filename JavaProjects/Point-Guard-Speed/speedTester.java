package com.java24hours;

public class speedTester {
    public static void main (String[] arguments) {
        westbrookSpeed jordan = new westbrookSpeed();
        wallSpeed nike = new wallSpeed();
        jordan.speed = 22;
        nike.speed = 18;
        System.out.println("Fast break speed contest in Jordan\'s:");
        jordan.displaySpeed();
        jordan.seconds();
        System.out.println("Fast break speed contest in Nike\'s:");
        nike.displaySpeed();
        nike.seconds();
    }
}
