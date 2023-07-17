import cv2
import numpy as np

# Define the upper and lower boundaries for the color detection
# You can customize these values to detect different colors
lower_color = np.array([0, 0, 0])
upper_color = np.array([255, 255, 255])


# Define the callback function for the trackbar
def update_threshold(*args):
    global lower_color, upper_color
    lower_color[0] = cv2.getTrackbarPos('H min', 'Color Detection')
    lower_color[1] = cv2.getTrackbarPos('S min', 'Color Detection')
    lower_color[2] = cv2.getTrackbarPos('V min', 'Color Detection')
    upper_color[0] = cv2.getTrackbarPos('H max', 'Color Detection')
    upper_color[1] = cv2.getTrackbarPos('S max', 'Color Detection')
    upper_color[2] = cv2.getTrackbarPos('V max', 'Color Detection')


# Create a named window to display the camera feed
cv2.namedWindow('Color Detection')

# Create trackbars to adjust the color threshold
cv2.createTrackbar('H min', 'Color Detection', lower_color[0], 255, update_threshold)
cv2.createTrackbar('S min', 'Color Detection', lower_color[1], 255, update_threshold)
cv2.createTrackbar('V min', 'Color Detection', lower_color[2], 255, update_threshold)
cv2.createTrackbar('H max', 'Color Detection', upper_color[0], 255, update_threshold)
cv2.createTrackbar('S max', 'Color Detection', upper_color[1], 255, update_threshold)
cv2.createTrackbar('V max', 'Color Detection', upper_color[2], 255, update_threshold)

# Open the default camera
cap = cv2.VideoCapture(0)

while True:
    # Read the camera feed
    ret, frame = cap.read()

    if ret:
        # Convert the frame to HSV color space
        hsv = cv2.cvtColor(frame, cv2.COLOR_BGR2HSV)

        # Apply the color threshold
        mask = cv2.inRange(hsv, lower_color, upper_color)

        # Display the result
        cv2.imshow('Color Detection', mask)

        # Wait for key press and check if the user wants to quit
        key = cv2.waitKey(1)
        if key == ord('q'):
            break

# Release the resources
cap.release()
cv2.destroyAllWindows()
