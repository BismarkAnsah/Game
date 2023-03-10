const  chunkArray = (array, chunkSize) => {
    let result = [];
    for (let i = 0; i < array.length; i += chunkSize) {
      result.push(array.slice(i, i + chunkSize));
    }
    return result;
}



const factorial = (num) => {
    if (num == 0) return 1;
    if (num < 0) return 0
    let result = num;
    for (let i = num - 1; i > 1; i--) result *= i;
    return result;
}

//n= number of selections 
//r= sample items selected
const getCombination = (n, r) =>  {
    if (!(r >= 0 && n >= r)) return 0;
    return factorial(n) / (factorial(r) * factorial(n - r));
}



export {
    chunkArray,
    getCombination
}


const nums = [1,2,3,4,5,6,7]
Array.from(nums)