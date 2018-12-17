<script>
                            function getselected()
                            {
                                 var selectvalue=document.getElementById("list").value;
                                
                                
                                if(selectvalue=='--Select Item--')
                                {
                                    document.getElementById("total").value="";
                                    document.getElementById("quantity").value="";
                                }

                                var quan=document.getElementById("quantity").value;
                                 var selectvalue=document.getElementById("list").value;
                                
                                
                                if(selectvalue=='Cake')
                                {
                                    document.getElementById("total").value = 15*quan;
                                }
                                else if(selectvalue=='Samosa')
                                {
                                    document.getElementById("total").value=15*quan;
                                }
                                else if(selectvalue=='Tea')
                                {
                                    document.getElementById("total").value=10*quan;

                                }
                                else if(selectvalue=='Coffee')
                                {
                                    document.getElementById("total").value=10*quan;
                                }
                                else
                                {
                                    document.getElementById("total").value="";
                                }
                            }
                        </script>