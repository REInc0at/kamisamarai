import cv2
import numpy as np


def nothing(x):
    pass

# Tracker
cv2.namedWindow("Frame")
cv2.createTrackbar("H", "Frame", 0, 180, nothing)
cv2.createTrackbar("S", "Frame", 255, 255, nothing)
cv2.createTrackbar("V", "Frame", 255, 255, nothing)

img_hsv = np.zeros((250, 500, 3), np.uint8)

while True:
    h = cv2.getTrackbarPos("H", "Frame")
    s = cv2.getTrackbarPos("S", "Frame")
    v = cv2.getTrackbarPos("V", "Frame")

    img_hsv[:] = (h, s, v)
    img_bgr = cv2.cvtColor(img_hsv, cv2.COLOR_HSV2BGR)

    cv2.imshow("Frame", img_bgr)
    key = cv2.waitKey(1)
    if key == 27:
        break


cv2.destroyAllWindows()