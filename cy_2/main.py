import cv2

img = cv2.imread("field.jpg")

print(img)

cv2.imshow("Image", img)
cv2.waitKey(0)