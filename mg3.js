function changeColor(value){
    var theme = document.getElementsByClassName("theme")

    if(value == "black" || value == "blue"){
        for(let i = 0; i < theme.length; i++){
            theme[i].style.color = 'white'
        }
        document.body.style.backgroundColor = value
    }else{
        for(let i = 0; i < theme.length; i++){
            theme[i].style.color = 'black'
        }
        document.body.style.backgroundColor = value
    }
}

function changeWeather(value){
    var weather = document.getElementById("weather")

    if(value == "Sunny"){
        weather.innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach or the park, and get an ice cream."
    }
    else if(value == "Rainy"){
        weather.innerHTML = "Rain is falling outside. Take a raincoat and a brolly, and don't stay out for too long."
    }
    else if(value == "Cloudy"){
        weather.innerHTML = "Watch out! It's like the sky want to cry."
    }
    else if(value == "Snowy"){
        weather.innerHTML = "It's cold outside! Take your coat and sip your hot chocolate, have fun!"
    }
    else if(value == "Windy"){
        weather.innerHTML = "Whoosh~~ The tree joyfully dancing in the wind"
    }
}

function factorial(){
    var number = document.getElementById("number").value
    var result = number
    console.log(number)

    for(let i = result-1; i > 0; i--){
        result *= i
    }

    var factorial = document.getElementById("factorial")
    factorial.innerHTML = `The factorial of ${number} is ${result}`
}