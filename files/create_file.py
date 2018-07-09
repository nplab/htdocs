#!/usr/bin/env python
import os, sys

def createfile(size, name):
    file = open(name,"w")
    i = 0
    s = ""
    while i <= size:
        x = (i % (126 - 33)) + 33
        s += chr(x)
        i = i + 1

    file.write("%s" % s)
    file.close()

    print("{:s} written".format(name))

createfile(512, "512B")
createfile(1 * 1024, "1K")
createfile(2 * 1024, "2K")
createfile(4 * 1024, "4K")
createfile(1 * 1024 * 1024, "1M")
createfile(2 * 1024 * 1024, "2M")
createfile(4 * 1024 * 1024, "4M")
createfile(8 * 1024 * 1024, "8M")
createfile(16 * 1024 * 1024, "16M")
createfile(32 * 1024 * 1024, "32M")
createfile(64 * 1024 * 1024, "64M")
createfile(128 * 1024 * 1024, "128M")
