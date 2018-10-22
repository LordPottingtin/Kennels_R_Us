<?php
    include("../view_helpers/header.php");
?>
    <main>
    <div class = "centered">
        <figure> 
            <h3>Large - $$$</h3>
            <img class = "product-pic" src = "#lrg" alt = "Large Kennel" width = "10px" height = "10px">
            <select>
                <option value="">Select desired amount</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </figure>

        <figure> 
            <h3>Standard - $$</h3>
            <img class = "product-pic" src = "#std" alt = "Standard Kennel" width = "10px" height = "10px">
            <select>
                <option value="">Select desired amount</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </figure>
    </div>

    <div class = "centered">
        <figure> 
            <h3>Small - $</h3>
            <img class = "product-pic" src = "#sml" alt = "Small Kennel" width = "10px" height = "10px">
            <select>
                <option value="">Select desired amount</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </figure>
    
        <figure> 
            <h3>Custom - $?</h3>
            <img class = "product-pic" src = "#cust" alt = "Custom Kennel" width = "10px" height = "10px">
            <button href = "./products/index?action=custom">Click for Customization</button>
        </figure>
    <div>
    </main>
<?php
    include("../view_helpers/footer.php");
?>