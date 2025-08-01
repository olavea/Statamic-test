
    <!-- 15:43 @csrf  -->
    <form method="POST" action="/gateways">
    @csrf 

    <div>
        <div>
        <h2>Name a New Omvei Stop ⛵</h2>
        <p>You need a name to start creating your stop.</p>

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
                    <p>
                    // The "Talking Link" should come later in the "edit" view 
                    </p>
                </div>
                <div>
                    <label for="title">Link to a Talking Tiny Tale</label>
                    <div>
                        <div>
                            <input 
                                type="text" 
                                name="location" 
                                id="location" 
                                placeholder="🎤 Talking Link">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <p>
                <!-- //br -->
            </p>
        </div>
    <div>
        <button type="button">Cancel</button>
        <button type="submit">Save</button>
    </div>
    </form>


