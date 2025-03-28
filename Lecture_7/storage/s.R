#1
matrix <- matrix(c(3, -2, 1, 6, 4,
                    -5, 8, 2, -3, 7,
                    9, 0, -4, 10, -1,
                    6, -7, 3, 5, 2), nrow=4, byrow=TRUE)
matrix

submatrix1 <- matrix[2:4, 4:5] 
submatrix1
#2
matrix2 <- matrix(c(3, -2, 1, 6, 4,
                    -5, 8, 2, -3, 7,
                    9, 0, -4, 10, -1,
                    6, -7, 3, 5, 2), nrow=4, byrow=TRUE)
matrix2

submatrix2 <- matrix2[1:3,2:4]
submatrix2
#3
matrix3 <- matrix(c(2, 3, 1, 5, 7,
                    8, 6, 4, 2, 9,
                    10, 1, 3, 7, 4,
                    5, 11, 6, 8, 3), nrow=4, byrow=TRUE)
matrix3
submatrix3 <- matrix3[,3:4]
submatrix3

#4
matrix2[1, ] <- matrix3[3, ]
matrix2

#5
matrix4 <- matrix(c(1, 4, 7, 10, 13,
                    2, 5, 8, 11, 14,
                    3, 6, 9, 12, 15), nrow=3, byrow=TRUE)
matrix4

matrix4[1, 3] <- 2  
matrix4[1, 5] <- 2  
matrix4[3, 3] <- 1 
matrix4[3, 5] <- 1 

matrix4
