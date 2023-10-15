# Rate Limiting

This document provides an overview of the rate limiting policies implemented in the Anti Grazer API to ensure fair usage and to maintain the quality of service. Adhering to these limits helps to protect the system from abuse and ensure a reliable experience for all users.

## Overview

Rate limiting is a technique used to control the rate at which clients can make requests to the server. This is crucial for maintaining a high level of service, ensuring system stability, and preventing abuse.

## Rate Limit Headers

Clients can check the rate limit headers returned by the API to understand their current rate limit status. These headers include:

- `X-RateLimit-Limit`: The maximum number of requests allowed in a given time window.
- `X-RateLimit-Remaining`: The number of requests remaining in the current time window.
- `X-RateLimit-Reset`: The time at which the rate limit window resets (in UTC epoch seconds).

Example headers:

```plaintext
X-RateLimit-Limit: 1000
X-RateLimit-Remaining: 500
X-RateLimit-Reset: 1633046400
```

## Rate Limiting Policies

The rate limiting policies for the Anti Grazer API are as follows:

- **General Rate Limit**: A general rate limit applies to all endpoints. Clients can make up to 1000 requests per hour.

- **Burst Rate Limit**: A burst rate limit allows clients to make a higher number of requests in a short burst, for instance, 100 requests per minute.

- **Authenticated vs. Unauthenticated Requests**: Authenticated requests may have higher rate limits compared to unauthenticated requests. It is advisable to authenticate your requests to enjoy higher rate limits.

- **Special Endpoints**: Some endpoints may have specific rate limits due to their nature or the data they access. These limits will be documented on a per-endpoint basis.

## Exceeding Rate Limits

When a client exceeds their rate limit, the API will respond with a `429 Too Many Requests` status code, along with a message indicating that the rate limit has been exceeded.

```json
{
    "error": {
        "code": "RATE_LIMIT_EXCEEDED",
        "message": "You have exceeded your rate limit. Try again later."
    }
}
```

## Recommendations

- **Backoff**: If you reach a rate limit, it's advisable to back off and try the request again later.

- **Optimize Requests**: Try to minimize the number of requests by fetching only the data you need, using filters, and making use of bulk operations where possible.

- **Authenticate**: Authenticate your requests to enjoy higher rate limits.

- **Monitor Rate Limit Headers**: Keep an eye on the rate limit headers to understand your current usage and adjust your requests accordingly.

## Further Reading

- For more information on HTTP status codes, refer to [HTTP Status Codes](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).
- For advanced rate limiting strategies, refer to [Advanced Rate Limiting Techniques](https://www.nginx.com/blog/rate-limiting-nginx/).
