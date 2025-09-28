import matplotlib.pyplot as mtp
import numpy as np


def usingmtp():
    xpoints = np.array([0, 6])
    ypoints = np.array([0, 251])
    mtp.plot(xpoints, ypoints, "o")
    mtp.show()


# usingmtp()
# They are working as X and Y axis like 3 as x -> 103 as y coordinate
def usingmtp2():
    xpt = np.array([3, 5, 6, 2])
    ypt = np.array([103, 57, 200, 160])
    mtp.plot(
        xpt, ypt, "^", ms=20, mec="g", mfc="purple"
    )  # minimumSize(ms) and mec=border color or Edge color ,mfc="face color fill inside"
    # markeredgecolor ->mec
    # markerfacecolor =>mfc
    mtp.show()


# usingmtp2()
def usingmyway():
    x1 = np.array([20, 40, 5])
    x2 = np.array([40, 400, 50])
    y1 = np.array([60, 300, 30])
    y2 = np.array([0, 200, 20])
    mtp.plot(y1, x2, ls="dashed")
    mtp.plot(y2, x1, ls="dotted")
    mtp.xlabel("Test1")
    mtp.ylabel("Test 2")
    mtp.title("Title Test")
    mtp.grid(axis='x') #or simply grit()...as you want.
    mtp.show() 


# usingmyway()
def usingsubplot():
    x = np.array([0, 1, 2, 3])
    y = np.array([3, 8, 1, 10])
    mtp.subplot(1,2,1)
    mtp.title("G1")
    mtp.plot(x,y,'o')
    x=np.array([4,2,6,8])
    y=np.array([10,4,8,16])
    mtp.subplot(1,2,2)
    mtp.plot(x,y)
    mtp.title("G2")
    mtp.suptitle("The sample Title for all G's")
    mtp.show()
# usingsubplot()
def fromdoc():
    x = np.linspace(0, 2 * np.pi, 200)
    y = np.sin(x)

    fig, ax = mtp.subplots()
    ax.plot(x, y)
    mtp.show()
# fromdoc()
def usinScatter():
    x=np.array([1,2,3,4,5,6,7,8,9,10])
    y=np.array([4,3,2,5,6,7,5,32,1,8])
    mtp.subplot(1,2,1)
    mtp.grid()
    mtp.scatter(x,y)
    mtp.subplot(1,2,2)
    mtp.scatter(y,x)
    mtp.grid()
    mtp.show()
# usinScatter()
def scatpart2():
    x=np.array([1,2,3,4,5,6,7,8,9,10])
    y=np.array([4,3,2,5,6,7,5,32,1,8])
    mtp.subplot(1,2,1)
    mtp.scatter(x,y)
    n=np.array([1,2,3,4,5,6,7,8,9,10])
    m=np.array([4,3,2,5,6,7,5,32,1,8])
    colors=np.random.randint(100,size=(10))
    sizes=10*np.random.randint(1,100,size=(10))
    mtp.subplot(1,2,2)
    mtp.scatter(m,n, c=colors, s=sizes, alpha=0.5, cmap='nipy_spectral')
    mtp.colorbar()
    mtp.show()
scatpart2()