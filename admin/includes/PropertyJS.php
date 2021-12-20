<script type="text/javascript">
     document.querySelector(".searching").onclick = ()=>{
      alert("hi");
    //   document.querySelector(".input-search").classList.toggle("active");
    //   document.querySelector(".formdisplay").classList.remove("active");
    //   document.querySelector(".deleteingproperty").classList.remove("active");
    }
     document.querySelector(".registering").onclick = ()=>{
      // alert("hi")
      document.querySelector(".input-search").classList.remove("active");
      document.querySelector(".deleteingproperty").classList.remove("active");
      document.querySelector(".formdisplay").classList.toggle("active");
      
    }
    
    document.querySelector(".delete").onclick = ()=>{
      // alert("hi")
      document.querySelector(".formdisplay").classList.remove("active");
      document.querySelector(".input-search").classList.remove("active");

      document.querySelector(".deleteingproperty").classList.toggle("active");
      
    }
</script>