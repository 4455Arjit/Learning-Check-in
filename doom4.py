import numpy as np
ar=np.array([7,4,6,7],dtype='i') #Specify datatype upon declaring an array
print(ar)
print(ar.dtype)
'''i - integer
b - boolean
u - unsigned integer
f - float
c - complex float
m - timedelta
M - datetime
O - object
S - string
U - unicode string
V - fixed chunk of memory for other type ( void )'''
reass=ar.astype('S')
print(reass)
print(reass.dtype)
def copingary():
    B=np.array([1,2,3,4,5])
    b=B.copy()
    B[0]=42
    print(B)
    print(b)
copingary()
def viewingary():
    C=np.array([1,2,3,4,5])
    c=C.view()
    C[0]=56
    print(C,"This is original array")
    print(c,"This is the View")
    print("We made changes into Original and we got changes into COPY of the array : i mean VIEW is not a copy(its just a copy but not like a copy!!)")
    c[2]=45
    print("This time we 1st made changes to the VIEW: changing the VIEW = Also affecting real Array")
    print(C)
    print(c)
viewingary()
def checkaryownsdata():
    ary=np.array([1,2,3,4,5])
    ab=ary.copy()
    cd=ary.view()
    print(ab.base)
    print(cd.base)
checkaryownsdata()
def reshapin():
    ary=np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])
    neary=ary.reshape(2,3,2)
    print(neary)
    print(neary.shape)
    print(neary.ndim)
reshapin()
def vieworcopy():
    ar=np.array([1,2,3,4,5,6,7,8])
    print(ar.reshape(2,4).base)  #Original array = VIEW
vieworcopy()
def d1to3d():
    ar=np.array([1,3,4,5,5,6,7,8])
    print(ar.shape)
    enw=ar.reshape(2,2,-1)
    print(enw)
d1to3d()
def iteratin1d():
    ar=np.array([1,2,3,5,6,7,8])
    for a in ar:
        print(a)
iteratin1d()
def iter2d():
    ar=np.arange(10).reshape(2,5)
    print("inside and outside")
    for a in ar:
        print(a)
        for b in a:
            print(b)
iter2d()
print("-"*20)
def iter3d():
    narr=np.arange(20).reshape(2,2,5)
    print(narr.ndim)
    print(narr)
    i=0
    for a in narr:
        print("Shows the 2D array: ",i)
        i=i+1
        print(a)
        print("------"*5)
    for a in narr:
        for b in a:
            for c in b:
                print(c)

iter3d()
def nditerfunc():
    ar=np.arange(30).reshape(3,5,2)
    print(ar)
    print(ar.ndim)
    print("the nditer = n-> dimension Iteration i guess=Iterates over all dimensions at once and cancel the overhead of using for loops again and agin as done before")
    for x in np.nditer(ar):
        print(x)
    
nditerfunc()
def checkit():
    ar=np.arange(1,4)
    for x in np.nditer(ar,flags=['buffered'],op_dtypes=['S']):
        print(x)
checkit()
def denumerate():
    ar=np.arange(1,4)
    print("Shows the index and element as an e.g..enumerate is quite good dude.")
    for idx,x in np.ndenumerate(ar):
        print(idx,x)
denumerate()
def joinin():
    a1=np.array([1,2,4])
    a2=np.array([8,6,7])
    arfinal=np.concatenate((a1,a2),axis=0)
    print(arfinal)
joinin()
def axxis():
    a1=np.array([[1,2,4],[8,6,7]])
    a2=np.array(a1+7)
    finalar=np.concatenate((a1,a2),axis=0)  #works like x and y axis as 0 and 1 i guess and determines the output
    print(finalar)
axxis()
def stackin():
    ar1=np.arange(1,4)
    ar2=np.arange(4,7)
    arfin=np.hstack((ar1,ar2)) #"Horizontal Stack" => hstack and Vstack for VERTICAL(original)
    print("___"*10)
    print(arfin)
    ardstack=np.dstack((ar1,ar2))
    print("there's a Dstack too-> depth stack or Height stack")
    print(ardstack)
stackin()
