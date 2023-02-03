async function getLocationZarqa(){
    
    
     const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=32.0608,36.0942&zoom=16";
    
     const response2=await fetch(url2);
    
    //console.log(response2);
     
     document.getElementById("locationZarqa").src=response2.url;
    }



    async function getLocationAmman(){
    
    
        const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=31.9539,35.9106&zoom=16";
       
        const response2=await fetch(url2);
       
       //console.log(response2);
        
        document.getElementById("LocationAmman").src=response2.url;
       }



       async function getLocationIrbid(){
    
    
        const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=32.5568,35.8469&zoom=16";
       
        const response2=await fetch(url2);
       
       //console.log(response2);
        
        document.getElementById("LocationIrbid").src=response2.url;
       }


       async function getLocationAqaba(){
    
    
        const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=29.5321,35.0063&zoom=16";
       
        const response2=await fetch(url2);
       
       //console.log(response2);
        
        document.getElementById("LocationAqaba").src=response2.url;
       }

       async function getLocationAlkark(){
    
    
        const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=31.1853,35.7048&zoom=16";
       
        const response2=await fetch(url2);
       
       //console.log(response2);
        
        document.getElementById("LocationAlkark").src=response2.url;
       }

       async function getLocationMaan(){
    
    
        const url2="https://maps.locationiq.com/v3/staticmap?key=pk.bbb9361b7feafe06b246a2e3327ce6d8&center=30.1927,35.7249&zoom=16";
       
        const response2=await fetch(url2);
       
       //console.log(response2);
        
        document.getElementById("LocationMaan").src=response2.url;
       }

    
       

const options = {
    method: 'GET',
  url: 'https://makeup.p.rapidapi.com/products.json',
  params: {brand: 'colourpop', product_category: 'lipstick'},
  headers: {
    'X-RapidAPI-Key': 'b7c06b5b26msh412c9e72f66d51ap15714djsn260eada2ea76',
    'X-RapidAPI-Host': 'makeup.p.rapidapi.com'
  }
};
  async function cosmatics(){
   
    let res = await fetch(`https://makeup.p.rapidapi.com/products.json`,options);
    let data = await res.json();
    console.log(data);
    makeup(data);
  }
  
  cosmatics();
  
  function makeup(data){
  
    let tableData1 = `<tr>
  
  <th style = "text-align: center;">Name</th>
  <th style = "text-align: center;">description</th>
  <th style = "text-align: center;">Price</th>
  <th style = "text-align: center;">Price Sign </th>
 
  
  
  
  </tr>`;
  
  
  for(let i = 0; i<30; i++){
  
        tableData1+= `<tr>
  
    <td>${data[i].name} </td>
    <td>${data[i].description} </td>
    <td>${data[i].price} </td>
 
    <td>${data[i].price_sign} </td>
  
    
    </tr>`;
  
    document.getElementById("makeup").innerHTML = tableData1;
  
  }
  
  }

