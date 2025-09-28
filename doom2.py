import numpy as np

a = np.array([2, 3, 4, 5])
b = np.array([8, 5, 4])
c = np.array([5, 4, 6, 8, 3])
ax,bx,cy=np.ix_(a,b,c)
print(ax)
print(bx)
print(cy)
print(ax.ndim)
print(bx.ndim)
print(cy.ndim)
print(ax.shape,bx.shape,cy.shape)
