const ajax = function(data){
    var chamada = new XMLHttpRequest()
    chamada.onreadystatechange = function(){
        if(chamada.readyState == 4){
            if(200 <= this.status && this.status <=299){
                data.action(this.response)
            }
            else{
                if(data['erro'] != undefined)
                    data.erro(this)
            }
        }
    }
    chamada.responseType = 'json'
    chamada.open(data['method'], data['url'], true)
    header = (data['header'])?(data['header']):(['X-Resquested-With', 'XMLHttpRequest'])
    chamada.setRequestHeader(header[0], header[1])
    chamada.send( (data['data'])?(data['data']):(null) )
}