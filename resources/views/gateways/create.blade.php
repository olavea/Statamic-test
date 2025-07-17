
    <!-- 15:43 @csrf  -->
    <form method="POST" action="/gateways">
    @csrf 

    <div>
        <div>
        <h2>Name a New Omvei Gateway ⛵</h2>
        <p>We just need a name from you to start.</p>

            <div>
                <div>
                    <label for="title">Name</label>
                    <div>
                        <div>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                placeholder="🥔 Potet på 🛴  ">
                        </div>

                    </div>
            
                
                </div>
                <div>
                    <label for="title">location</label>
                    <div>
                        <div>
                            <input 
                                type="text" 
                                name="location" 
                                id="location" 
                                placeholder="🗺️ location">
                        </div>

                    </div>
            
                
                </div>
            
            </div>
        </div>



    <div>
        <button type="button">Cancel</button>
        <button type="submit">Save</button>
    </div>
    </form>


