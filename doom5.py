import numpy as np
def arysplit():
    ar=np.arange(1,7)
    newar=np.array_split(ar,3)
    print(newar)
    print(newar[0])
    print(newar[1])
    print(newar[2])
arysplit()
print("-"*10)
def split2d():
    ar=np.arange(1,13).reshape(6,2)
    print(ar.ndim)
    print(ar)
    final=np.array_split(ar,3) #split the 2d arrays to another 2D arrays each one.
    return final
split2d()
print(split2d())
def searchin():
    ar= np.arange(1,8)
    x=np.where(ar==5)
    return x
print(searchin())
def withcalcs():
    ar=np.arange(1,9)
    x=np.where(ar%2 == 0)
    d=[]
    for a in ar:
        if(a%2==0):
            d.append(a)
    print(d)
    return x

print(withcalcs())
print("-"*10)
def srchsrt():
    ar=np.arange(6,10)
    x=np.searchsorted(ar,8,side="left")
    print(x)
srchsrt()
def findposition_wheretoinsert():
    ar=np.array([3,1,5,7])
    x=np.searchsorted(ar,[4,6,8])
    print(x)
    srt=np.sort(ar)
    print(srt)
findposition_wheretoinsert()
def filtering():
    ar=np.array([41, 42, 43, 44])
    x=[True,True,True,False]
    newar=ar[x]
    print(newar)
filtering()
def filtr(arr):
    filter_ar=[]
    for elem in arr:
        if elem > 42:
            filter_ar.append(True)
        else:
            filter_ar.append(False)
    newar=arr[filter_ar]
    print(filter_ar)
    print(newar)
filtr(np.arange(30,50))
def filt2(ar):
    arrup=[]
    for elem in ar:
        if elem%2==0:
            arrup.append(True)
        else:
            arrup.append(False)
    newar=ar[arrup]
    print(arrup)
    print(newar)
filt2(np.arange(3,39))
