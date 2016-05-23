//
//  main.cpp
//  Honors
//
//  Created by Dominique Jones on 5/8/16.
//  Copyright © 2016 Dominique L. Jones. All rights reserved.
//

#include <iostream>

using namespace std;

int main() {
    
    double gpa;
    
    cout << "Enter your GPA: ";
    cin >> gpa;
    cout << endl;
    
    if (gpa >= 2.0)
    {
        if (gpa >= 3.5)
            cout << "Congratulations Cum Laude Graduate!" << endl;
    }
    else if  (gpa >= 3.75)
        cout << "Congratulations Summa Cum Laude Graduate!" << endl;
     else if (gpa >= 4.0)
         cout << "Congratulations Magna Cum Laude Graduate!" << endl;
    else if (gpa < 2.0)
        cout << "Your GPA does not meet the graduation requirement." << endl;
        
    
    return 0;
}
