const urlUF = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'
const uf = document.getElementById("uf")
const cidade = document.getElementById("cidade")
uf.addEventListener('change', async function(){

    const urlCidades = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+uf.value+'/municipios'
    const request = await fetch(urlCidades)
    const reponse = await request.json()
    let options = ''
    responde.forEach(function(cidades){
        options += '<options>'+cidades.nome+'</options>'
    })
    cidade.innerHTML = options
})
window.addEventListener('load', async()=>{
    const request = await fetch (urlUF)
    const reponse = await request.json()    
    const options = document.createElement("optgroup")
    options.setAttribute('label', 'UFs')
    reponse.forEach (function(uf){
        options.innerHTML += '<option>'+uf.sigla+'</option>'
    })
    uf.append(options)
})

