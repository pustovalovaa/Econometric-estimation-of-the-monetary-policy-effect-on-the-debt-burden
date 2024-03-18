function S=stability(beta,n,l,m)

%coef   (n*l+1)xn matrix with the coef from the VAR
%l      number of lags
%n      number of endog variables
%FF     matrix with all coef
%S      dummy var: if equal one->stability
coef=reshape(beta,n*l+m,n);
%coef
%coef
FF=zeros(n*l,n*l);
FF(n+1:n*l,1:n*(l-1))=eye(n*(l-1),n*(l-1));

temp=reshape(beta,n*l+m,n);
temp=temp(1:n*l,1:n)';
FF(1:n,1:n*l)=temp;
ee=max(abs(eig(FF)));
S=ee>=1;

