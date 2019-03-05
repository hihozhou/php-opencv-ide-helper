<?php

namespace CV;

//matrix decomposition types
/** Gaussian elimination with the optimal pivot element chosen. */
const DECOMP_LU = 0;
/** singular value decomposition (SVD) method; the system can be over-defined and/or the matrix
src1 can be singular */
const DECOMP_SVD = 1;
/** eigenvalue decomposition; the matrix src1 must be symmetrical */
const DECOMP_EIG = 2;
/** Cholesky \f$LL^T\f$ factorization; the matrix src1 must be symmetrical and positively
defined */
const DECOMP_CHOLESKY = 3;
/** QR factorization; the system can be over-defined and/or the matrix src1 can be singular */
const DECOMP_QR = 4;
/** while all the previous flags are mutually exclusive, this flag can be used together with
any of the previous; it means that the normal equations
\f$\texttt{src1}^T\cdot\texttt{src1}\cdot\texttt{dst}=\texttt{src1}^T\texttt{src2}\f$ are
solved instead of the original system
\f$\texttt{src1}\cdot\texttt{dst}=\texttt{src2}\f$ */
const DECOMP_NORMAL = 16;