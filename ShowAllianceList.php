API endpoint name: ShowAllianceList.php


POST parameters:
        postAuthKey: our auth key
        adminId: String id of admin
        
        
        
Response parameters:
        success: boolean
        validAuth: boolean
        validAdmin: boolean(false for invalid or logged out admin)
        allianceList: JSON array containing names of alliances
