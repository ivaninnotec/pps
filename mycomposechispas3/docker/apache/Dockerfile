FROM httpd:2.4.51

COPY chispas.apache.conf /usr/local/apache2/conf/chispas.apache.conf

RUN echo "Include /usr/local/apache2/conf/chispas.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
