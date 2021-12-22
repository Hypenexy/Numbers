    function create($id) {
        $.ajax({
        url: "number/index.php",
        type: "post",
        dataType: 'json',
        data: {n: eval($id)},
        success:function(result){
            setFact(result.fact)
            setNumeral(result.number)
            setMath(result.lastnumber, result.number)
            show()
        }
        })
    }

    function show(){
        factdiv.style.display = "block"
        numeraldiv.style.display = "block"
        math.style.display = "block"
        support.style.display = "block"
    }
    function hide(){
        factdiv.style.display = "none"
        numeraldiv.style.display = "none"
    }
    function toggle(){
        if (factdiv.style.display == "block") {
            factdiv.style.display = "none"
            numeraldiv.style.display = "none"
        }
        else{
            factdiv.style.display = "block"
            numeraldiv.style.display = "block"
        }
    }

    function setFact(fact) {
        document.getElementById("fact").innerHTML = fact
    }

    function setNumeral(numeral){
        var binary = document.getElementById("binary")
        var octal = document.getElementById("octal")
        var hexadecimal = document.getElementById("hexadecimal")
        var x = parseInt(numeral)
        
        binary.innerHTML = "Binary " + x.toString(2)
        if (x>7 || x<-7){
            octal.innerHTML = "Octal " + x.toString(8)
            octal.style.display = "block"
        }
        else{
            octal.style.display = "none"
        }
        if (x>9 || x<-9){
            hexadecimal.innerHTML = "Hexadecimal " + x.toString(16)
            hexadecimal.style.display = "block"
        }
        else{
            hexadecimal.style.display = "none"
        }
    }

    function setMath(last, current){
        var plus = document.getElementById("plus")
        var minus = document.getElementById("minus")
        var multiply = document.getElementById("multiply")
        var divide = document.getElementById("divide")
        var power = document.getElementById("power")
        var size = document.getElementById("size")
        last = parseInt(last)
        current = parseInt(current)
        if(last){
            document.getElementById("ifnumberisset").style.display = "block"
            var plusr = current + last
            var minusr = current - last
            plus.innerHTML = `${current} + ${last} = ` + plusr
            minus.innerHTML = `${current} - ${last} = ` + minusr
            multiply.innerHTML = `${current} * ${last} = ` + current * last
            divide.innerHTML = `${current} / ${last} = ` + current / last
        }
        power.innerHTML = `${current}^2 = ` + current*current
        size.innerHTML = (new TextEncoder().encode(current)).length + " Bytes"
    }