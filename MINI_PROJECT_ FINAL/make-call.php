<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
<?php
    // Requires libcurl

    const key = "YOUR_key";
    const secret = "YOUR_secret";
    const to = "YOUR_to_number";
    const fromNumber = "YOUR_from_number";
    const locale = "YOUR_locale";

    $payload = [
    "method" => "ttsCallout",
    "ttsCallout" => [
        "cli" => fromNumber,
        "destination" => [
        "type" => "number",
        "endpoint" => to
        ],
        "locale" => locale,
        "text" => "Hello, this is a call from Sinch. Congratulations! You made your first call."
    ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode(key . ":" . secret)
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://calling.api.sinch.com/calling/v1/callouts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
    echo "cURL Error #:" . $error;
    } else {
    echo $response;
    }

?>
