# TODO list

- Support GnuPG 2
- Introduce gnupg_geterrorinfo with more info about the error
  - including error message from gpgme
- Return decrypt result if extra param supplied (including recipients)
  - https://github.com/php-gnupg/php-gnupg/pull/12
- Add support for exporting multiple keys using `gpgme_op_export_ext`
  - https://github.com/php-gnupg/php-gnupg/issues/10
- Extend keyinfo
  - Add `can_encrypt`, `can_sign`, `can_certify` and `can_authenticate` to the main key
  - Add user signatures
- Add missing tests for following functions:
  - `gnupg_geterror`
  - `gnupg_getprotocol`
  - `gnupg_clearsignkeys`
  - `gnupg_clearencryptkeys`
  - `gnupg_cleardecryptkeys`
  - `gnupg_gettrustlist`
- Create new README.md
- Update PHP.net documentation
