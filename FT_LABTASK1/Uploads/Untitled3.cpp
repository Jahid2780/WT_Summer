#include<iostream>
using namespace std;

class DOB{
    int day;
    string month;
    int year;
public:
    DOB(){
        day=0;month="";year=0;
    }
    DOB(int d,string m,int y){
        day=d;month=m;year=y;
    }
    void print(){
        cout<<day<<" : "<<month<<" : "<<year<<endl;
    }
};

class Student{
    string name;
    string id;
    DOB *dob;
public:
    Student(){
        name="";id="";dob=new DOB();
    }
    Student(string n,string i,DOB *d){
        name=n;id=i;dob=d;
    }
    void print(){
        cout<<"ID of "<<name<<" is : "<<id<<endl;
        cout<<"His/her Date of Birth : ";
        dob->print();
    }
};
int main(){
    //DOB db(5,6);
    DOB *d=new DOB(25,"January",1998);
    Student *s=new Student("raju","18-12345-2",d);
    s->print();
}
