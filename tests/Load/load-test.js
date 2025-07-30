import http from 'k6/http';
import { sleep, check } from 'k6';

export let options = {
  vus: 50, // virtual users
  duration: '30s',
};

export default function () {
  let res = http.get('http://localhost:8000/api/products');

  check(res, {
    'status is 200': (r) => r.status === 200,
    'response time < 200ms': (r) => r.timings.duration < 200,
  });

  sleep(1);
}