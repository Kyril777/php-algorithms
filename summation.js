/* JS function for summation. */
const summation = (num = 1) => {
   let res = 0;
   for(let i = 1; i <= num; i++){
      res += i;
   };
   console.log(res);
};
summation(34); // 585
summation(10); // 55
