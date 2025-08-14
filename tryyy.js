//===============================================Attempting to do it with a loop=========================================
function fibo(numbb) {  //[0,1,1,2,3,5,8] -> 0+1=1 , 1+1=2  ,  1+2=3,  2+3=5,  3+5=8 .....
    let a = 0
    let b = 1;
    let c = a + b;
    while (a <= numbb) {
        console.log(a);
        a = b;
        b = c;
        c = a + b;

    }
}
try {
    fibo(55);
}
finally {
    console.log("The loop is ok");
}
function fibfor(num) {
    let a = 0;
    let b = 1;
    let c = a + b;
    for (let x = 0; a <= num; x++) {
        console.log(a);
        a = b;
        b = c;
        c = a + b;
    }
}
try{
fibfor(55);
}
finally{
    console.log("This dude also worked out");
}
function logicFIB() {

    // 0,1,1,2,3,5,8,13 ...
    //0=a ,1=b ,1=a ,2=b+a ,3=a+b+a
    //I need a fibonacci series with normal logic// without loop first.
    let a = 0;
    let b = 1;
    let c = a + b;
    console.log(a);  //will be 0
    a = b;   //1
    b = c;   //1
    c = a + b; //1+1=>2
    console.log(a);   //will be 1
    a = b;  //1
    b = c;  //2
    c = a + b;  //3
    console.log(a); //will be 1
    a = b; //2
    b = c;  //3
    c = a + b; //5
    console.log(a); //will be 2
    a = b; //3
    b = c;  //5
    c = a + b; //8
    console.log(a); //will be 3
    a = b; //5
    b = c; //8
    c = a + b; //13
    console.log(a); //will be 5
    a = b;  //8
    b = c;  //13 
    c = a + b;  //21
    console.log(a); //will be 8
}
// logicFIB();