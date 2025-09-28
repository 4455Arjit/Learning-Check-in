import numpy as nm
from numpy import pi
a=nm.arange(20).reshape(4,5)
print(a)
print(a.shape)
print(a.ndim)
print(a.itemsize)
print(type(a))
b=nm.array([6.5,7,8])
print(b)
print(type(b))
print(b.dtype)
c=nm.array([[1,2],[3,4]],dtype=complex)
print(c)
print(nm.zeros((4,5)))
d=nm.ones((2,3,4),dtype=nm.int16)  #2 for number of matrices then 3 and 4 for row columns.
print(d)
e=nm.empty((3,4))
print(e)
print("-"*10)
f=nm.arange(10,30,5)
print(f)
print("-"*10)
g=nm.arange(0,2,0.5)
print(g)
print("-"*10)
h=nm.linspace(0,2,9)
print(h)
print("-"*10)
i=nm.linspace(0,2 * pi,100)
j=nm.sin(i)
print(j)
k=nm.arange(60).reshape(3,2,5,2)
print(k)
print(k.shape)
print(k.ndim)
print(k.size)
print("-"*10)
l=nm.array([20,50,50,200])
m=nm.arange(4)
print(m,l)
n=l-m
print(n)
print("-"*10)
print(m**2)
print("-"*10)
print(10*nm.sin(l))
print(l<100)
o=nm.array([[1,1],[0,1]])
p=nm.array([[2,0],[3,4]])
print(o*p)
print("-"*10)
print(o@p)   #proper dot product of matrices...i mean arrays
print("-"*10)
print(p.dot(o))
q=nm.random.default_rng(1)
r=nm.ones((2,3),dtype=int)
s=q.random((2,3))
r*=7
print(s)
print("-"*10)
print(r)
print(q)
t=nm.linspace(31,pi,3)
print("-"*10)
print(t)
print(t.sum())
print(t.min())
print(t.max())
print(t.dtype.name)
u=t+s
print(u)
v=nm.exp(u*1j)
print("-"*10)
print(v)
print(l.sum(axis=0))  #sum of each column
print("-"*10)
print(l.min(axis=0))  #min of each row
print("-"*10)
print(l.cumsum(axis=0)) #cumulative sum along each row
def func(x,y):
    return 10 * x+y
m=nm.fromfunction(func,(5,4),dtype=int)
#internal happening: 
# x_coords = np.array([[0, 0, 0, 0],
#                      [1, 1, 1, 1],
#                      [2, 2, 2, 2],
#                      [3, 3, 3, 3],
#                      [4, 4, 4, 4]])

# y_coords = np.array([[0, 1, 2, 3],
#                      [0, 1, 2, 3],
#                      [0, 1, 2, 3],
#                      [0, 1, 2, 3],
#                      [0, 1, 2, 3]])
print(m)
print("-"*10)
print(m[2,3])
print("-"*10)
print(m[0:5,1])
print("-"*10)
print(m[:,1])
print("-"*10)
print(m[1:3,:])
n=nm.array([[[0,1,3],
             [10,30,48]],
             [[100,102,230],
              [120,439,205]]])
print(n.shape)
print(n.ndim)
print("*"*20)
for row in n:
    print(row)
print("-"*20)
for eles in n.flat:
    print(eles)

print("-"*20)
print(n.ravel())
print(n.T)
print(n.shape)
print(n.T.shape)
print(nm.hsplit(a,(3,4)))
o=nm.arange(12)**2
print("-"*10)
print(o)
print("-"*10)
p=nm.array([1,2,3,4,5,5,6])
print(o[p])
q=nm.array([[2,3],[5,6]])
print(o[q])
# palette below
r=nm.array([[0, 0, 0],         #black 
            [255, 0, 0],     #red
            [0, 255, 0],       #green
            [0, 0, 255],       #blue
            [255, 255, 255]])   #white
#image below
s=nm.array([[0, 1, 2, 0],  # each value corresponds to a color in the palette
            [0, 3, 4, 0]])
print("-"*10)
print(r[s])
t=nm.linspace(20,145,5)
u=nm.sin(nm.arange(20)).reshape(5,4)
print(t)
print(u)
v=u.argmax(axis=0)
print("-"*10)
print(v)
w=nm.arange(12).reshape(3,4)
x=w>4
print(x)
print(w[x])
w[x]=0
print(w)
