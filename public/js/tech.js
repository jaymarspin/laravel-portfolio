var techData = $(".tech")

    for(var i = 0;i < techData.length;i++){
      var tmp = techData[i].innerText
      tmp = tmp.split(",")
      $(techData[i]).html(null)
      for(var x = 0;x < tmp.length;x++){
        var stacks = document.createElement("div")
        stacks.className = "stacks "+tmp[x].toLowerCase()
        stacks.innerText = tmp[x]

        $(techData[i]).append(stacks)

      }
    }