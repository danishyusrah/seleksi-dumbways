let dataKey = ['dumb', 'ways', 'the', 'best'];
let word = 'dumbways';

function check(arrData, data){
    for(let word of arrData){
        if(data.includes(word)){
            console.log(word + ' => true');
        }else{
            console.log(word + ' => false');

        }
    }
}
check(dataKey, word);