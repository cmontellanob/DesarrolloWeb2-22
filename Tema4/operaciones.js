function factorial(n){
    let fact=1;
    for (let i = 1; i <= n; i++) {
        fact=fact*i;
    }
    document.write("El factorial de "+n+" es: "+fact);
}
