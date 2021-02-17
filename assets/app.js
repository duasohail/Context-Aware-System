//To get Weather

function btnn(){
var namecity=document.querySelector('#cityName').value;
console.log(namecity);

var temp=document.querySelector('.temp');
var desc=document.querySelector('.desc');
var city=document.querySelector('.city');
var feels=document.querySelector('.feels');
// alert("heyyyy");


// var api=`api.openweathermap.org/data/2.5/weather?q={london}& appid=762578e4b2fd52db9196d8076dd3203f`;
fetch('http://api.openweathermap.org/data/2.5/weather?q='+namecity+'&appid=762578e4b2fd52db9196d8076dd3203f')
  .then((Response)=>{
      return Response.json();
  })
  .then(data =>{
      console.log(data);
      var nameValue=data['name'];
      var description=data['weather'][0]['description'];
      var temperature=data['main']['temp'];
      var feel=data['main']['feels_like'];
    //   console.log(nameValue+description+temperature);
    city.innerHTML='Name: '+nameValue;
    desc.innerHTML='Description: '+description;
    feels.innerHTML='Feels Like: '+feel+'F';
    temp.innerHTML='Temperature: '+temperature+'F';
  })
}



// function for time 
function getCityTime(){
    // alert('hihkj');s
    // var tm=document.querySelector('#cityTime').value;
    document.querySelector('.displayTime').innerHTML=new Date().toLocaleTimeString();

}




// instagram
$(document).ready(function(){

	var userfeed = new Instafeed({
		get:'user',
		userId:'7009147287',
		limit:25,
		resolution:'standard_resolution',
		accessToken:'7009147287.1677ed0.13b00613f7444dd5a189381c42756633',
		sortBy:'most-recent',
		template:'<div class="gallery col-lg-3"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
	});

	userfeed.run();

});