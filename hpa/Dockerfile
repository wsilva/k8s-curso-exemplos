FROM alpine:latest as builder

ENV VERSION=3.1.4

RUN apk add --update --no-cache g++ make \
    && wget http://download.joedog.org/siege/siege-$VERSION.tar.gz \
    && tar -xf siege-${VERSION}.tar.gz \
    && cd siege-${VERSION} \
    && ./configure \
    && make install

FROM alpine:latest
COPY --from=builder /usr/local/bin/siege2csv.pl /usr/local/bin/siege2csv.pl
COPY --from=builder /usr/local/bin/siege /usr/local/bin/siege
COPY --from=builder /usr/local/bin/siege.config /usr/local/bin/siege.config
COPY --from=builder /usr/local/etc/siegerc /usr/local/etc/siegerc
ENTRYPOINT ["siege"]
CMD ["--help"]