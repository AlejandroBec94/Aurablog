<template>

</template>

<script>
    export default {
        name: "Dashboard",
        created() {

            axios.post("api/auth/user", [], {
                headers: {'Authorization': 'Bearer '
                        + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiN2I3YTRiNTAxMjkyZDY3YWYwMjQ0ZTI4OTI1MjMyMmY3Y2MzZTFhYjI3MDA1Zjk5MzJhMDJmMzMxZDQ3MGZkYTM3N2VlM2ViOWMzMjdlNmYiLCJpYXQiOiIxNjEwOTEyOTk1Ljg4NDA1NiIsIm5iZiI6IjE2MTA5MTI5OTUuODg0MDgyIiwiZXhwIjoiMTY0MjQ0ODk5NS43NzAxNDYiLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.knExd4ifvRY5JtgQqwG5AHNSLjaSx47_zethE9nhduz8fBZJT5Hwisqx-GLb4lumdfp9CyGEL9RQBWS9OJ8dUUP5UCQ5igSWmDMuSRu86XEWRqaBQLnfrPM8x_ejCZr2Pw7RGc-S6slWVaNgc_6BMRTRj1XrpWTDItP9cp2jhcsQKr-nkOUBUalonnr8ocdcYlN8SarpUS0naQ4ybP65DjYfkoZiXRnKZi57HGOpO-mdweNmJ1io4g_ctRpT5rfNGSzxzEHSX7Wr_MSRyu23d51TJUSxYWcCNWZN4Rvyqma8QEfnRksuGQ8q6wz0XhwfBP4ym2XhhvAkCSRGosVC0YtAt6ZcIzq_2NAJrpssnQB-zGcjaQkwiRGFZa-194Sqt5LBS1VwAMXOtiSXW7E3cSbRsq1xdF4wVLF3p4hIZ3VK33xDf-FSuEiBaXqcvCNukg-_voL02zOYpX5sj1f4B-3RS8wYsDIO_-_95-0J_I_guINvkiHctupsvGhOfewiSGRfX02ykyc91OoJ5XcuslTPGtkAPGWm34Swk9yFFoQAX9nv4jHoYUpT0tD93OKjBFUoHbVl8GUuPztuWgnZ9a7ABtfDiSFNJuy4poy-I_lGmAXmS1_s1xCUtj86kP_jDogA5h98oPdAzlfQUlnwEzrw1AH6EdE8nMHXOir9VME'}
            }).then(response => {
                console.log(response.data)
            })
        }
    }
</script>

<style scoped>

</style>
