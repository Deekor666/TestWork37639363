FROM node:16 as build-stage
WORKDIR /app
RUN ls -la
COPY ./ .
RUN npm run build

FROM nginx as production-stage
EXPOSE 8080
RUN mkdir /app
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=build-stage /app/dist /app

