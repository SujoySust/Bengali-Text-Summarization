document.getElementById("task-form").addEventListener('submit', function(e)
{
    e.preventDefault();
    var value = document.getElementById("task").value;
    // for(i=0;i<value.length;i++)
    // {
    //     console.log(value[i]);
    //     if(value[i] == 'T')
    //     {
    //         value[i-2]+="<br/>";
    //     }
    // }

    document.getElementById("summary").innerHTML = value; 
});

