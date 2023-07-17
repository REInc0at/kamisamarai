import cv2
import numpy as np

def on_mouse_click(event, x, y, flags, param):
    if event == cv2.EVENT_LBUTTONDOWN:
        pixel = image[y,x]
        hsv_pixel = cv2.cvtColor(np.uint8([[pixel]]), cv2.COLOR_BGR2HSV)
        hue = hsv_pixel[0][0][0]
        print("Selected color: ", hsv_pixel)
        color_range = 10 # range of color values to include in the mask
        lower_color = np.array([hue-color_range, 50, 50])
        upper_color = np.array([hue+color_range, 255, 255])
        mask = cv2.inRange(hsv, lower_color, upper_color)
        result = cv2.bitwise_and(image, image, mask=mask)
        cv2.imshow("result", result)

image = cv2.imread("image.jpg")
hsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)
cv2.imshow("image", image)
cv2.setMouseCallback("image", on_mouse_click)
cv2.waitKey(0)
