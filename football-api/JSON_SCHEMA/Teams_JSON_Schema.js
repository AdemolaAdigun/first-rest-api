var Ajv = require('ajv'),
    ajv = new Ajv({logger: console}),
    schema = {
            "items": {
                "required": [
                    "Name",
                    "Goals",
                    "Shots",
                    "ShotsOnTarget",
                    "Fouls",
                    "YellowCards",
                    "RedCards",
                    "Passes",
                    "Dribbles",
                    "Tackles",
                    "Saves"
                ],
                "properties": {
                    "Name": {
                        "$id": "#/items/properties/Name",
                        "type": "string"
                    },
                    "Goals": {
                        "$id": "#/items/properties/Goals",
                        "type": "integer"
                    },
                    "Shots": {
                        "$id": "#/items/properties/Shots",
                        "type": "integer"
                    },
                    "ShotsOnTarget": {
                        "$id": "#/items/properties/ShotsOnTarget",
                        "type": "integer"
                    },
                    "Fouls": {
                        "$id": "#/items/properties/Fouls",
                        "type": "integer"
                    },
                    "YellowCards": {
                        "$id": "#/items/properties/YellowCards",
                        "type": "integer"
                    },
                    "RedCards": {
                        "$id": "#/items/properties/RedCards",
                        "type": "integer"
                    },
                    "Passes": {
                        "$id": "#/items/properties/Passes",
                        "type": "integer"
                    },
                    "Dribbles": {
                        "$id": "#/items/properties/Dribbles",
                        "type": "integer"
                    },
                    "Tackles": {
                        "$id": "#/items/properties/Tackles",
                        "type": "integer"
                    },
                    "Saves": {
                        "$id": "#/items/properties/Saves",
                        "type": "integer"
                    }
                }
            }
    };
 
pm.test('Schema is valid', function() {
    var data = pm.response.json();
    pm.expect(ajv.validate(schema, data)).to.be.true;
});