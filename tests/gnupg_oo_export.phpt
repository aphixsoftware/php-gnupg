--TEST--
export a key
--SKIPIF--
<?php if(!class_exists("gnupg")) die("skip"); ?>
--FILE--
<?php
require_once(dirname(__FILE__)."/vars.inc");
$gpg = new gnupg();
$gpg -> seterrormode(gnupg::ERROR_WARNING);
$ret = $gpg -> export($fingerprint);
var_dump($ret);
?>
--EXPECTF--
string(%d) "-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v%d.%d.%d (GNU/Linux)

mQINBF/0p2oBEADJrIjmuVsty/u6GxtN8AAHNbBv7pDAbxLMzPDTHZgnczDoZa+d
RyRVz5+Hbxzb9U+id9ND6mJ2uDZNWoBW3didW9kD6/9lPssHeGRZxVJ47jsG01i4
odgzH038voDFgVQk+rgJ6wmbWPIII1OfoIDHZ98T7/7n+xJivXwZ3yRPjTpescjs
rTaUSXSz51bfAgPDwcgQK1TUPAxTgGWndfv8cckwYagHDGxKQwp2p0JIiFbt0czB
FEvm8ec5ekLUmj6MZKi+Kwkk7ZO/+CpYRBDXtQKAZ2EfR/ZIhk4gzui+IRN3MRIy
quHRJTMYfImevfgw2OgJ9z8zPalUGzDk88v41BFLLB3sAeItZ6BaEb/odGNjXANZ
x/tO4D96Uk1WlUySzolR9fPfjVdUpFBtOvTQoU5gg1Qqz+DvrpCutoCUZ9kjCmH0
LX/3qMMaJ/pORo1TIz/K7gBRicQ8vWHGj5GTg5W01JJmJOc8af39dj55Gxd6wlKN
gmKOnyWkQpIfIw3zPdnWiEjiWKqlWF0jT/+GY+EWbwLaZ4CGL1X58pCm/5ur98eG
CdM8V6KvR0/kv9+jiVY4ScZvmrVljD47UX6VP4pOassuoSOZbe+B+t/6puO1MVAo
9BBHu1p4o5/YLURTvGjQrBjub1bcZ8VD8fH3aVtnf+jVXDSjYupokeFGIQARAQAB
tBlQSFAgR251UEcgPGdudXBnQHBocC5uZXQ+iQI4BBMBAgAiBQJf9KdqAhsDBgsJ
CAcDAgYVCAIJCgsEFgIDAQIeAQIXgAAKCRCXarejB2GBWBsKD/4k0zGo8CHIXD1D
jOKAup+RPnRRLcOOHCO/90OgYOAo+wov1JdtgntzExg/QhrlTIFgq0fHtK0uGKcs
VLMX4V0fFuaeFcrMdZiE23alPvbyprSVblRYa1U6Kwumz+QJ8lG6YVuOyQGEPAXT
2yakk9qqs7OmseEniNbNpMyzNwnGHs5ictXrQdjifqncWtst2mLa5wyijOr3f2Qe
lGZAYIc3aaLr9hbIz6e2cLiTwWFd4U4Y6qZeOwbn9j0l91BQzFMgX8cDJYK6XgVS
CqXXc8y59Z0+Q+K7DoYBGwFpxe5/W2xbIZzcVFYHUCM799jOonE/ryte/3Cu3C9B
pSWznlT4IjwvX9WlOSOHiEJaOJzDtKcJdVJ8yMZLOaJPS/z3r6q0Y0PsSsZvrRBm
N0uhENz/GLhH6rpFRxNNENMrb+LePgllK8VnoUNEZAvPIjhvkb8JmflXwuci0r3Z
7b+dldZ9MLEbx69LFhtaW0XC2FjNrh+DSgRYlYw1UKyh/+Zyk+tySQkjoXF3RbBr
VYx9joZXvi86ItX5Nw9FKvjoQpClveMgXbHPec5kMP/nyBe1TKvNLoeh1F3nFsv+
iDE5Yl9dmsOqBZMZ4JBdN4aRf+7QhcC+D2PiJnEnF82z3trZCnUSVupZMZhKwQb+
fITIMHiolm48b7zCIw3kcb9bfbNqz7kCDQRf9KdqARAAz6+kFoX8Zodto/dhkpOc
LnoBG9wUfT2qpJFC40S4DsIWCm+ZVE0823CXjmnkgVimoasB21jZMrBWpT5/YLmy
6tDKn+4+qGuDaaE6F3gnenst9PG10hDsdV3jzhmtyRJq7DIv9lKoeUQ0lxPHmn/U
ErVa7N1hvg6YrHzfZ1oW/9x8gVHIeBhkUKOlqd/1hdRoiJszfy15qCfahw5wCZnL
C/4clm0gc6tzS3pFOhgOJ2tUyM/+LipfjrqAVtK4QoGVhYOWXPERGjjdADhV7VMM
2AQGC1mrg1b1ZgM9/NICW+EJgzzp5JFgD4AdzaZC+LqGaHkl481J7pIRlgB2iXBj
bjZq5qHBzyKEjfXjbywMFN1D29PF/O7tEogS+NiK8FLhUpRWLA6uRh3hYpig27f9
tDRRJ9xJmqsXvhWqB6i1oht0xMc6osZUiEacWtoKcvcqC8h/KuFA/hXeL3R0L9oF
oAupeG1m4CiC07UGceozJW+U7RgjR6eyuU3P/pmFdQa9tXSPQddcvx0tlZTW/QQh
jvpYllpWzHt2ih6ji+dYqBU1gLHaD3jrDO7y5ZkVMIcjZ4c/yuc3GtQPoSlH7dCX
3XqIpdsDUywCFg1gVGNY2UVQ5oGGgL3eXJwWK0AxVQ+4VcItNCFUr4QdL+7VPusg
4oRnCrhAFM9fDAbtNveKJh8AEQEAAYkCHwQYAQIACQUCX/SnagIbDAAKCRCXarej
B2GBWN+xD/9sI/aY4Z7FVa7PC41QJ4k/fQwxesaQgilxh5KFDOLD1ww0SxhaGyMh
nQL1qwwc0e8LWcAHTU+4dAJ+IRa5+dLdzXJwYqP4XeIUr3uDyIhJXeNxFTae5cUy
gShda/I3nmUoB/VQrGT3LjGc2V+PLialr91MBJiIzY16GBWalK9QsAlPmK+9+LVX
Kti3nNMuZ270HokIRnMXnYeLqYasjame4UYGJmgVM1RirQMTGdzPucK/fh+O1TPQ
l0C1Ydh1dUBV/7VoUCAo2o71LURUUxxKgAGnSrc4maDiXXSO3sLwWIACiMq+gOld
tbWkdRIgQk2HrjfT3oiiy61ntimX5J29514UizinwdNhDzmnst3dUr8TpoxmkgZG
NCskMzpEN3+kWe7zVCm5yuxjtdIx5hjy4ISIYzNQRtsPlt2A8c4LJg62anDBEcR9
srEESGH753xfTYX3478bkQhctGuY1vJ0rSWJT32wSe75uGdKLhoMaTsm4F/ItFZi
X6EU4+WUBYVl6BCwqi/pfoSWlLLjef5BviYETpSvRFb5Xx8cdXsfRSZcEBMQeywj
50nt3JVQqgPkUG3S2JLlfUC4pOJgr4K9LzxKOz0d8rbu1xzGcPy4f/AKLOfHVIeU
z67HXiRsxEC6IZsNRfW5x9NlA7bTH25xbw25WRP9pFfZhwN6qHatEw==
=2PXh
-----END PGP PUBLIC KEY BLOCK-----
"
