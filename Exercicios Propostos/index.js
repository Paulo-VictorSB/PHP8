console.log(fatorial(5))

function fatorial(n){
    if(n < 0){
        return -1
    } else if(n == 0) {
        return 1
    } else {
        return (n * fatorial(n - 1))
    }
}

