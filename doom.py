import numpy as np
import matplotlib.pyplot as plt


def mandelbrot(h, w, maxit=20, r=2):
    x = np.linspace(-2.5, 1.5, 4 * h + 1)
    y = np.linspace(-1.5, 1.5, 3 * w + 1)
    A, B = np.meshgrid(x, y)
    C = A + B * 1j
    z = np.zeros_like(C)
    divtime = maxit + np.zeros(z.shape, dtype=int)
    for i in range(maxit):
        z = z**2 + C
        diverge = abs(z) > r
        div_now = diverge & (divtime == maxit)
        divtime[div_now] = i
        z[diverge] = r
    return divtime


plt.clf()
plt.imshow(mandelbrot(400, 400), cmap="hot")
plt.show()
