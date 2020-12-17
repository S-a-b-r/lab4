var arr = document.getElementById('array');
var out = document.getElementById('outputArr');
arr.addEventListener('keydown',()=>{
    const promise = processing(arr.value);
    promise.then(onDataReceived);
})

function processing(arr){
    const params = new URLSearchParams();
    
    params.append('arr', arr);
    params.append('method', 'processing');
    
    const promise = axios.post('http://poker/main.php', params);
    return promise.then((response) =>{
        return response.data;
    });
}

function onDataReceived(data){
    out.innerHTML = data;
}