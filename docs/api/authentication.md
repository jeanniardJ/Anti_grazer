# Authentication

In this document, we will cover the authentication mechanism used to secure the Anti Grazer API. Authentication is crucial to ensure that only authorized users and systems can interact with the API and access or manipulate data as permitted.

## Authentication Scheme

Anti Grazer API employs a token-based authentication scheme. Before making any requests to the API, clients must obtain an access token by authenticating with their credentials.

### Obtaining an Access Token

1. **Client Credentials**: Clients need to use their client ID and client secret to obtain an access token.
   
```http
POST /oauth/token
Content-Type: application/x-www-form-urlencoded

client_id=YOUR_CLIENT_ID&client_secret=YOUR_CLIENT_SECRET&grant_type=client_credentials
```

The server will respond with an access token if the credentials are valid.

```json
{
    "access_token": "ACCESS_TOKEN",
    "token_type": "Bearer",
    "expires_in": 3600
}
```

### Using the Access Token

Once obtained, the access token must be included in the Authorization header in every request to the API.

```http
GET /some-endpoint
Authorization: Bearer ACCESS_TOKEN
```

## Token Expiry

Tokens have a finite lifespan, which is typically set to 1 hour but can be configured differently. Once a token expires, a new one needs to be obtained.

## Revoking Access Tokens

In case a token needs to be revoked before its natural expiration, it can be done through a dedicated endpoint.

```http
POST /oauth/revoke
Content-Type: application/x-www-form-urlencoded

token=ACCESS_TOKEN
```

## Error Handling

In case of authentication failure, the API will respond with a 401 Unauthorized status code along with an error message. Clients should handle such responses and take appropriate action, such as re-authenticating or notifying the user.

```json
{
    "error": "invalid_client",
    "error_description": "Client authentication failed"
}
```

## Security Best Practices

- **HTTPS**: Always use HTTPS to ensure that the credentials and tokens are securely transmitted.
- **Token Storage**: Store tokens securely to prevent unauthorized access.
- **Token Exposure**: Never expose tokens in URLs, logs, or other insecure locations.

## Further Reading

For further details on OAuth 2.0, which is the protocol used for authentication in the Anti Grazer API, refer to the [OAuth 2.0 specification](https://tools.ietf.org/html/rfc6749).
