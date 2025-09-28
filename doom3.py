import numpy as np
rg=np.random.default_rng(1)
import matplotlib.pyplot as plt
mu,sigma=4,1.5
v=rg.normal(mu,sigma,1000)
plt.hist(v,bins=30,density=True)
(n,bins)=np.histogram(v,bins=40,density=True)
plt.plot(.7*(bins[1:]+bins[:-1]),n)
plt.show()